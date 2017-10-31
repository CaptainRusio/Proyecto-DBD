
import random

random.seed(100)

INSERT = "INSERT"
INTO = "INTO"
VALUES = "VALUES"

#Main
AUX = "viendole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sabete, Sancho, que no es un hombre mas que otro si no hace mas que otro. Todas estas borrascas que nos suceden son senales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aqui se sigue que, habiendo durado mucho el mal, el bien esta ya cerca. Asi que, no debes congojarte por las desgracias que a mi me suceden, pues a ti no te cabe parte dellas.Y, viendole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sabete, Sancho, que no es un hombre mas que otro si no hace mas que otro. Todas estas borrascas que nos suceden son senales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aqui se sigue que, habiendo durado mucho el mal, el bien esta ya cerca. Asi que, no debes congojarte por las desgracias que a mi me suceden, pues a ti no"

TEXT_AUX = AUX.split(" ")
#Para agregar valores al SQL se usa la siguiente linea:
#		INSERT INTO "nombre_tabla" ("columna1", "columna2", ...)
#		VALUES ("valor1", "valor2", ...);



tabla = raw_input("Ingrese el nombre de la tabla: \n")
tabla = tabla 
print("Ingrese el numero de filas que desea ingresar: \n")
num_rows = input()
print("Ingrese el numero de elementos que tiene una linea: \n")
num_elements = input()
tipo = []
nameOfColumns = []
for x in range(0,num_elements):
	#Para cada uno de los elementos
	nameOfColumns.append(raw_input("Ingrese el nombre de la columna: "))
	print("Opcion: (0 -> int) (1 -> str): ")
	tipo.append(input())	
	print(tipo[x])

column = []



##FORMATEO DE INSERT INTO (AASDASD,ASDASD)
columnsAux = INSERT + " " + INTO + " " + tabla + " "
for j in range(0,num_elements):
	if(j == 0):
		columnsAux = columnsAux + "(" + nameOfColumns[j] + ","
	elif(j == num_elements - 1): # Si es el final
		columnsAux = columnsAux + nameOfColumns[j] + ")"
	else:
		columnsAux = columnsAux + nameOfColumns[j] + ","


for i in range(0,num_rows):
	stringToChange = columnsAux #Se extrae la linea
	stringToChange = stringToChange + VALUES + " "
	for j in range(0,num_elements):
		if( tipo[j] == 0): # Si es int
			if(j == 0):
				stringToChange = stringToChange + "(" + str(random.randrange(200)) + ","
			elif(j == num_elements - 1): # Si es el final
				stringToChange = stringToChange + str(random.randrange(200))  + ")"
			else:
				stringToChange = stringToChange + str(random.randrange(200)) + ","
			
		elif(tipo[j] == 1): # Si es string
			if(j == 0):
				stringToChange = stringToChange + "(\'" + TEXT_AUX[random.randrange(200)] + "\',"
			elif(j == num_elements - 1): # Si es el final
				stringToChange = stringToChange +"\'" + TEXT_AUX[random.randrange(200)] +"\'" + ")"
			else:
				stringToChange = stringToChange + "\'" + TEXT_AUX[random.randrange(200)] + "\',"
	column.append(stringToChange)

file = open("salida.sql","w")
file.close()
file = open("salida.sql","a")

for i in range(0,num_rows):
	file.write(column[i])
	if(i == num_rows - 1):
		file.write(column[i])
	else:
		file.write(column[i] + ";\n")

file.close()