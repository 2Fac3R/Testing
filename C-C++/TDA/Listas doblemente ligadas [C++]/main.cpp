#include <iostream>
#include "listas.h"

using namespace std;

int main(void)
{
    Lista numeros; // Mi lista
    char opc;      // Opcion del menu
    int n;         // dato a insertar

    do
    {
        cout << "\n \n  LISTAS DOBLEMENTE LIGADAS: ";
        cout << "\n *- MENU -* ";
        cout << "\n 1. AGREGAR A LA LISTA . ";
        cout << "\n 2. MOSTRAR LOS DATOS . ";
        cout << "\n 3. SALIR . ";
        cout << "\n         _> ";
        cin >> opc;

        switch (opc)
        {
        case '1':
            cout << "\n AGREGANDO DATOS A LA LISTA . ";
            cout << "\n INGRESE EL VALOR NUMERICO . ";
            cout << "\n         _> ";
            cin >> n;
            numeros.Insertar(n);
            cout << " --> < Guardado correctamente > " << endl;
            break;
        case '2':
            if (numeros.Vacia())
            {
                cout << "\n < No hay registros!. > ";
                break;
            }

            cout << "\n \n DATOS GUARDADOS EN LA LISTA: \n ";
            numeros.Mostrar();
            break;
        case '3':
            cout << " - < Saliendo!...... >" << endl;
            break;
        default:
            cout << " - < Opcion incorrecta!, intente de nuevo. >" << endl;
            break;
        }

    } while (opc != '3');

    cin.ignore();
    return 0;
}