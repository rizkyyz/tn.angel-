#include <stdio.h>

#include <conio.h>



int selisih;

struct waktu {

int jam;

int menit;

};

waktu waktu1, waktu2, sel_menit;

waktu hitung(waktu waktu1, waktu waktu2);



main (){

printf ("|_________________________________|\n");
printf ("|Program Penghitung Selisih waktu |\n");

printf ("|_________________________________|\n");


// inputab jam pertama

printf ("\n\nWaktu Pertama\n");

printf ("Masukan Jam     : ");scanf("%d",&waktu1.jam);

printf ("Masukan Menit   : ");scanf("%d",&waktu1.menit);



//inputan jam kedua

printf ("\n\nWaktu Kedua Kedua\n");

printf ("Masukan Jam     : ");scanf("%d",&waktu2.jam);

printf ("Masukan Menit   : ");scanf("%d",&waktu2.menit);



sel_menit = hitung(waktu1, waktu2);

printf("\n________________________________________");

printf ("\nSelisih Kedua waktu tersebut : %3d menit",sel_menit.menit);

printf ("\n__________________________________________");

getch ();

}

waktu hitung (waktu waktu1, waktu waktu2)

{

 waktu sel_menit;

 selisih = (waktu2.jam-waktu1.jam)*60+(waktu2.menit-waktu1.menit);

 sel_menit.menit = selisih;

 return sel_menit;
}
