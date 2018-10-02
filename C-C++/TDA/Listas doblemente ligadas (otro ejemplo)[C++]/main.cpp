#include <iostream>
using namespace std;
 
#define ASCENDENTE 1
#define DESCENDENTE 0
 
class nodo
{
private:
    int valor;
    nodo *siguiente;
    nodo *anterior;
 
    friend class lista;
 
public:
    nodo(int v, nodo *sig = NULL, nodo *ant = NULL) // CONSTRUCTOR
    {
        valor = v;
        siguiente = sig;
        anterior = ant;
    }
    // SETTERS
    void setAnterior(nodo *ant) { anterior = ant; }
    void setSiguiente(nodo *sig) { siguiente = sig; }
 
    // GETTERS
    int getValor() { return valor; }
    nodo *getSiguiente() { return siguiente; }
    nodo *getAnterior() { return anterior; }
};
 
 
class lista
{
private:
    nodo  *plista; // ANCLA
 
public:
    lista(){ plista = NULL; } // CONSTRUCTOR
 
    ~lista(); // DESTRUCTOR
 
    // METODOS DE LA LISTA
    void Insertar(int v);
    void Borrar(int v);
    bool ListaVacia() { return plista == NULL; }
    void Mostrar(int);
 
    // METODOS DE POSICION
    void Siguiente() { if(plista) plista = plista->getSiguiente(); }
    void Anterior() { if(plista) plista = plista->getAnterior(); }
    void Primero() {  while(plista && plista->getAnterior()) plista = plista->getAnterior(); }
    void Ultimo() {  while(plista && plista->getSiguiente()) plista = plista->getSiguiente(); }
    int ValorActual() { return plista->valor; }
 
};
 
lista::~lista() // VACIAMOS LA LISTA
{
   nodo *aux;
 
   Primero();
   while(plista) {
      aux = plista;
      plista = plista->getSiguiente();
      delete aux;
   }
}
 
void lista::Insertar(int v)
{
    nodo *nuevo;
 
    Primero();
    // Si la lista está vacía
    if(ListaVacia() || plista->getValor() > v)
    {
      nuevo = new nodo(v, plista);
      if(!plista) plista = nuevo;
      else plista->setAnterior(nuevo);
    }
    else
    {
      while(plista->getSiguiente() && plista->getSiguiente()->getValor() <= v) Siguiente();
      // Creamos un nuevo nodo después del nodo actual
      nuevo = new nodo(v, plista->getSiguiente(), plista);
      plista->setSiguiente(nuevo);
      if(nuevo->getSiguiente()) nuevo->getSiguiente()->setAnterior(nuevo);
    }
}
 
void lista::Borrar(int v)
{
   nodo *nodo;
 
   nodo = plista;
   while(nodo && nodo->getValor() < v) nodo = nodo->getSiguiente();
   while(nodo && nodo->getValor() > v) nodo = nodo->getAnterior();
 
   if(!nodo || nodo->getValor() != v) return;
   // Borrar el nodo
 
   if(nodo->getAnterior()) // no es el primer elemento
      nodo->getAnterior()->setSiguiente(nodo->getSiguiente());
   if(nodo->getSiguiente()) // no el el último nodo
      nodo->getSiguiente()->setAnterior(nodo->getAnterior());
   delete nodo;
}
 
void lista::Mostrar(int orden)
{
    nodo *nodo;
    if(orden == ASCENDENTE)
    {
        Primero();
        nodo = plista;
        while(nodo)
        {
        cout << nodo->getValor() << "-> ";
        nodo = nodo->getSiguiente();
        }
    }
    else
    {
        Ultimo();
        nodo = plista;
        while(nodo)
        {
            cout << nodo->getValor() << "-> ";
            nodo = nodo->getAnterior();
        }
    }
    cout << endl;
}
 
int main(void) {
    lista Lista;
 
    Lista.Insertar(20);
    Lista.Insertar(10);
    Lista.Insertar(40);
    Lista.Insertar(30);
 
    Lista.Mostrar(ASCENDENTE);
    Lista.Mostrar(DESCENDENTE);
 
    Lista.Primero();
    cout << "Primero: " << Lista.ValorActual() << endl;
 
    Lista.Ultimo();
    cout << "Ultimo: " << Lista.ValorActual() << endl;
 
    Lista.Borrar(10);
    Lista.Borrar(15);
    Lista.Borrar(45);
    Lista.Borrar(40);
 
    Lista.Mostrar(ASCENDENTE);
    Lista.Mostrar(DESCENDENTE);
 
    return 0;
}
 