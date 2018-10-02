#include <iostream>
 
using namespace std;
 
int main(){
 
    bool esPar(int);
    void mostrarArreglo(int[], int);
 
    int pares[20] = {NULL};
    int nones[20] = {NULL};
    int i, j=0 , k=0;
 
    for(i = 5; i<=100; i += 5){
        if(esPar(i) == true)
        {
            pares[j++] = i;
 
        }
        else
        {
            nones[k++] = i;
        }
    }
 
    cout << "Arreglo de numeros pares: ";
    mostrarArreglo(pares, j);
    cout << endl;
    cout << "Arreglo de numeros impar: ";
    mostrarArreglo(nones, k);
 
 
    return 0;
}
 
bool esPar(int x){
    if(x%2 == 0){
        return true;
    }
    else{
        return false;
    }
}
 
void mostrarArreglo(int arreglo[], int tam){
    for (int i = 0 ; i < tam ; i++)
        cout << arreglo[i] << " ";
}