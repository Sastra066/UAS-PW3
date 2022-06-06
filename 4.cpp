#include<iostream>
using namespace std;

main()
{
	int A[10][10],B[10][10],C[10][10],i,j,k,l,jumlah,baris1,kolom1,baris2,kolom2;
	cout<<"1. dua buah matriks"<<endl<<"2. skalar matriks"<<endl;
	cout<<"Jenis perkalian matriks : ";cin>>k;
	if (k==1){
		cout << "Masukkan jumlah baris matriks pertama: ";
	 	cin >> baris1;
	  	cout << "Masukkan jumlah kolom matriks pertama: ";
	  	cin >> kolom1;
	  	cout << "Masukkan jumlah baris matriks kedua: ";
	  	cin >> baris2;
	  	cout << "Masukkan jumlah kolom matriks kedua: ";
	  	cin >> kolom2;
	  	if(kolom1 != baris2){
	   	 	cout << "Matriks tidak dapat dikalikan satu sama lain.\n";
	  	} 
		else {
		    cout << "Masukkan elemen matriks pertama: \n";
		    for(i = 0; i < baris1; i++){
		      for(j = 0; j < kolom1; j++){
		    	cout<<"Nilai matriks baris ke "<<i+1<<" kolom ke "<<j+1<<" ";
		    	cin >> A[i][j];
		      }
		    }
		    cout << "Masukkan elemen matriks kedua: \n";
		    for(i = 0; i < baris2; i++){
		      for(j = 0; j < kolom2; j++){
		    	cout<<"Nilai matriks baris ke "<<i+1<<" kolom ke "<<j+1<<" ";
		        cin >> B[i][j];
		      }
		    }
		    for(i = 0; i < baris1; i++){
		      for(j = 0; j < kolom2; j++){
		        C[i][j] = 0;
		        for(l=0;l<kolom1;k++)
  				C[i][j]=C[i][j]+A[i][l]*B[l][j];
		      }
		    }
		    cout << "Hasil perkalian matriks: \n";
		    for(i = 0; i < baris1; i++){
		      for(j = 0; j < kolom2; j++){
		        cout << C[i][j] << "\n";
		      }
		      cout << endl;
		    }
		}
	}
	else if (k==2){
		cout<<"2";
	}
	else cout<<"Input 1 atau 2";
}