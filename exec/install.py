import mysql.connector
try:
	db = mysql.connector.connect(
		host="localhost"
		user="root"
		passwd="root"
		)

	cursor= db.cursor()

	cursor.execute("Create database prueba")
except ConnectionError as e:
	print("Can't connect to DB")
except Exception as e:
	print(e)