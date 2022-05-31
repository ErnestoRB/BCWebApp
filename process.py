import sys
import os
import errno

if len(sys.argv) < 2:
	exit(1)


datos_usuario = sys.argv[1]

try: #crea nueva carpeta para guardar los datos, ignora si ya existe
	os.mkdir('users_data')
except OSError as e:
	if e.errno != errno.EEXIST:
		raise

if not os.path.exists('users_data/data.txt'):
	open("users_data/data.txt", 'w').close()

try:
	archivo = open('users_data/data.txt', 'r')
except Exception as e:
	print("Error al abrir el archivo: ", e)
else:
	nReg = len(archivo.readlines())
	archivo.close()

try:
	archivo = open('users_data/data.txt', 'a')
except Exception as e:
	print("Error al abrir el archivo: ", e)
else:
	archivo.write(str(nReg) + "|" + datos_usuario + '\n') # escribe un identificador
	archivo.close()
