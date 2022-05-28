import sys
import os
import errno

datos_usuario = sys.argv[1]

try: #crea nueva carpeta para guardar los datos, ignora si ya existe
	os.mkdir('users_data')
except OSError as e:
	if e.errno != errno.EEXIST:
		raise

archivo = open('/var/www/html/BCWebApp/users_data/data.txt', 'a')
archivo.write(datos_usuario + '\n')
archivo.close()

