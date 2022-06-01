import sys
import os

if len(sys.argv) < 2:
	exit(1)

archivo = sys.argv[1]

if not os.path.exists(f'users_data/\'{archivo}\'.txt'):
	exit(1)

try:
	archivo = open(f'users_data/\'{archivo}\'.txt', 'r')
except Exception as e:
	print("Error al abrir el archivo: ", e)
else:
	print(archivo.readlines());
	archivo.close()
