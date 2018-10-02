#include <iostream>
 
using namespace std;
 
#ifndef __LISTAS_H_INCLUDED__
#define __LISTAS_H_INCLUDED__
 
class Nodo{
 
private:
    int dato;
    Nodo *sig;
    Nodo *ant;
public:
    Nodo(void) { sig = ant = NULL; }
 
    Nodo( int x , Nodo* s = NULL , Nodo* a = NULL )
    {
        dato = x;
        sig = s;
        ant = a;
    }
 
    // SETTERS
    void setDato(int x) { dato = x; }
    void setAnt(Nodo *a) { ant = a; }
    void setSig(Nodo *s) { sig = s; }
 
    // GETTERS
    int getDato()  { return dato;}
    Nodo *getAnt() { return ant; }
    Nodo *getSig() { return sig; }
 
};
 
class Lista
{
private:
    Nodo *lista; // ancla
public:
    Lista(void) { Inicializar(); } // CONSTRUCTOR
 
    // METODOS BASICOS
 
    Nodo *Primero() { return lista; }
    Nodo *Siguiente(Nodo *pos) { return pos->getSig(); }
    Nodo *Anterior(Nodo *pos) { return pos->getAnt(); }
 
    Nodo *Ultimo() {
        Nodo *aux = lista;
 
        if ( !Vacia() ) { while ( aux->getSig() ) { aux = aux->getSig(); } }
        return aux;
    }
 
    // METODOS DE LA LISTA
    void Inicializar() { lista = NULL; }
    bool Vacia() { return lista==NULL; }
    void Mostrar();
    void Insertar(int x, Nodo* pos = NULL);
};
 
 
void Lista::Insertar(int x, Nodo* pos)
{
    Nodo* aux;
        Nodo* temp_n = new Nodo(x);
 
        if ( Vacia() ){
                lista = temp_n;
 
        }else{
                if ( pos == Primero() ){
                        aux = Primero();
                        aux->setAnt(temp_n);
 
                        temp_n->setSig(aux);
                        lista = temp_n;
 
                }else if ( pos == NULL ){
 
                        aux = Ultimo();
                        aux->setSig(temp_n);
                        temp_n->setAnt(aux);
 
                }else{
                        aux = Primero();
 
                        while ( aux ){
                                if ( aux == pos ){
                                        Anterior(aux)->setSig( temp_n );
 
                                        temp_n->setAnt( Anterior(aux) );
                                        temp_n->setSig( aux );
 
                                        aux->setAnt( temp_n );
 
                                }else {
                                    aux = aux->getSig();
                }
                        }
                }
        }
}
 
void Lista::Mostrar()
{
    Nodo* aux;
 
    Primero();
    aux = lista;
        if ( !Vacia() ){
                while ( aux ){
            cout << aux ->getDato();
            cout << "\n";
            aux = aux ->getSig();
                }
        }
}
 
#endif