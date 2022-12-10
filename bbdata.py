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
    df = pd.read_excel("./blood-banks.xlsx")
    print(df.head())
    for i in range(1, len(df)):
        bldbankName = df.loc[i][" Blood Bank Name"]
        # need to destructure location
        stateText = df.loc[i][" State"]
        districttext=df.loc[i][" District"]
        subdistricttext=df.loc[i][" City"]
        address=df.loc[i][" Address"]
        pincode=df.loc[i]["Pincode"]
        nodalIncharge=df.loc[i][" Nodal Officer "]
        hospEmail=df.loc[i][" Email"]
        hospContact=df.loc[i][" Mobile"]
        licenceNo=df.loc[i][" License #"]
        try:
            cursor.execute(
                f"INSERT INTO `bloodstocks` (`identity`, `name`, `wbap`, `wban`, `wbbp`, `wbbn`, `wbabp`, `wbabn`, `wbop`, `wbon`, `plap`, `plan`, `plbp`, `plbn`, `plabp`, `plabn`, `plop`, `plon`, `pmap`, `pman`, `pmbp`, `pmbn`, `pmabp`, `pmabn`, `pmop`, `pmon`,`pincode`) VALUES ('blood bank', '{bldbankName}', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',{pincode});",
            database_connection.commit()
            )
            print("Successful")
        except:
            print("Unable")
adding_data()
    
		# print(bldbankName)
		# print(stateText)
		# print(districttext)
		# print(subdistricttext)
		# print(address)
		# print(pincode)
		# print(nodalIncharge)
		# print(hospEmail)
		# print(hospContact)
		# print(licenceNo)
		# adding_data()