import pandas as pd
# import mysql.connector
import mariadb
# import pymysql

database_connection = mariadb.connect(
   host="localhost",
   port=3306,
   user="root",
   password="",
   database="test"
)
cursor = database_connection.cursor(buffered=True)
def adding_data():
    '''
      adds the data from the csv file to the database 

    :return:
    '''
    df = pd.read_csv("./HospitalsIndia.csv")
    for i in range(1, len(df)):
        hospitalname = df.loc[i]["Hospital"]
        # need to destructure location
        state = df.loc[i]["State"]
        subdistrict=df.loc[i]["City"]
        address=df.loc[i]["LocalAddress"]
        pincode=df.loc[i]["Pincode"]
        try:
            cursor.execute(
                f"INSERT INTO `bloodstocks` (`identity`, `name`, `wbap`, `wban`, `wbbp`, `wbbn`, `wbabp`, `wbabn`, `wbop`, `wbon`, `plap`, `plan`, `plbp`, `plbn`, `plabp`, `plabn`, `plop`, `plon`, `pmap`, `pman`, `pmbp`, `pmbn`, `pmabp`, `pmabn`, `pmop`, `pmon`,`pincode`) VALUES ('blood bank', '{hospitalname}', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',{pincode});"
			)
            database_connection.commit()
            print("Successful")
        except:
            print("Unable")
adding_data()

query = "INSERT INTO `hosp_regis` (`id`, `username`, `password`, `hospitalname`, `hospitaltype`, `hospitalcaretype`, `hospitalregisnumber`, `nodalpersoninfo`, `nodalpersontele`, `nodalpersonemailid`, `statetext`, `districttext`, `subdistricttext`, `towntext`, `villagetext`, `pincode`, `address`) VALUES (NULL, 'A A Hospital', 'A A Hospital', 'A A Hospital', NULL, NULL, NULL, NULL, NULL, NULL, 'Tamil Nadu', 'Hosur', NULL, NULL, NULL, '635110', 'Denkani Kottai Road Mathigiri');"
