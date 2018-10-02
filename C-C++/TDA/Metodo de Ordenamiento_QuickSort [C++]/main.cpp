void QuickSortF( N_Vuelo** arr, int izq, int der ){
        int g, h, medio;
        N_Vuelo *pivote, *aux;
        medio = ( izq + der )/2;
        pivote = arr[medio];
        g = izq;
        h = der;
 
        while( g <= h ){
 
                while ( arr[g]->getDato()->getFS(1) < pivote->getDato()->getFS(1) ) { g++; }
                while ( pivote->getDato()->getFS(1) < arr[h]->getDato()->getFS(1) ) { h--; }
 
                if( g <= h ){
                        aux = arr[g];
                        arr[g] = arr[h];
                        arr[h] = aux;
                        g++;
                        h--;
                }
        }
 
        if ( izq < h ) { QuickSortF(arr, izq, h); }
        if ( g < der ) { QuickSortF(arr, g, der); }
}