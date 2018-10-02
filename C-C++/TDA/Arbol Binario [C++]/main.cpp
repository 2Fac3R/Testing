#include <iostream>
 
using namespace std;
 
#include "Pasajero.h"
 
#ifndef __arbolbinario_H_INCLUDED__
#define __arbolbinario_H_INCLUDED__
 
 
class Nodo
{
private:
    Pasajero *dato;
    Nodo *izq; //enlace izquierdo
    Nodo *der; //enlace derecho
 
public:
    Nodo(Pasajero *info); // CONSTRUCTOR
    ~Nodo(); // DESTRUCTOR
 
    // METODOS GET
    Pasajero *getPasajero() { return dato;}
    Nodo *getIzq() { return izq;}
    Nodo *getDer() { return der;}
 
    // METODOS SET
    void setIzq(Nodo *i) { izq = i;}
    void setDer(Nodo *d) { der = d;}
 
};
 
Nodo::Nodo(Pasajero *info)
{
    dato = info;
    izq = NULL;
    der = NULL;
}
 
Nodo::~Nodo()
{ }
 
class ArbolBinario
{
    private:
        Nodo *raiz;
        Nodo *Insertar(Nodo*,Pasajero*);
        Nodo *Borrar(Nodo*, Pasajero*);
        void preOrden(Nodo*);
        void inOrden(Nodo*);
        void postOrden(Nodo*);
    public:
        ArbolBinario();
        Nodo *getRaiz() { return raiz;} // testing method
        void Crear(Pasajero*);
        void Recorridos(int);
        void Eliminar(int);
        Pasajero *Buscar(string, Nodo*);
 
        ~ArbolBinario();
};
 
ArbolBinario::ArbolBinario(){
    raiz = NULL;
}
 
Nodo* ArbolBinario::Insertar(Nodo *p, Pasajero *q){
    if(p == NULL){
        p = new Nodo(q);
    }
    else{
        string a = p -> getPasajero()-> getApellido(); // Primera letra del apellido que esta en la raiz
 
        if(q->getApellido()[0] <= a[0])
        {
            p->setIzq( Insertar(p->getIzq(),q) );
 
        }
        else{
            p->setDer( Insertar(p->getDer(),q) );
        }
    }
 
    return p;
}
 
void ArbolBinario::Crear(Pasajero *q)
{
     raiz = Insertar(raiz,q);
}
 
void ArbolBinario::preOrden(Nodo *p){
    if(p != NULL){
        cout << "\n " << p->getPasajero()->getApellido();
        preOrden(p->getIzq());
        preOrden(p->getDer());
    }
}
 
void ArbolBinario::inOrden(Nodo *p){
    if(p != NULL){
        inOrden(p->getIzq());
        cout << "\n " << p->getPasajero()->getApellido();
        inOrden(p->getDer());
    }
}
 
void ArbolBinario::postOrden(Nodo *p){
    if(p != NULL){
        cout << " \n " << p->getPasajero()->getApellido();
        postOrden(p->getIzq());
        postOrden(p->getDer());
    }
}
 
void ArbolBinario::Recorridos(int tipo){
    switch(tipo){
        case 1:
            preOrden(raiz);
        break;
 
        case 2:
            inOrden(raiz);
        break;
 
        case 3:
            postOrden(raiz);
        break;
 
        default:
            cout << " - Error! opcion invalida!. -" << endl;
          break;
    }
}