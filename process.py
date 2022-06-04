import sys
import os
import errno

if len(sys.argv) < 2:
	exit(1)

datos_usuario = sys.argv[1]
nombre = datos_usuario.split('|')[0].replace(' ', '_')

try: #crea nueva carpeta para guardar los datos, ignora si ya existe
	os.mkdir('users_data')
except OSError as e:
	if e.errno != errno.EEXIST:
		raise

if not os.path.exists(f'users_data/{nombre}.txt'):
	open(f"users_data/{nombre}.txt", 'w').close()

try:
	archivo = open(f'users_data/{nombre}.txt', 'a')
except Exception as e:
	print("Error al abrir el archivo: ", e)
else:
	archivo.write(datos_usuario + '\n')
	archivo.close()
