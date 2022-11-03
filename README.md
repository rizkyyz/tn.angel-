/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */
// variable / property = merek,kecepatan,warna
// tipe data = string,int
//method = nyalakan matikan
//object = mobil1,2,3

package com.mycompany.tugas1;

class Mobil{
    
    //inisialisasi variable / bisa di debut dengan property
    String merek; 
    int kecepatan;
    String warna;
    
    //Method
    void nyalakan (){
       System.out.println(merek+ "\n" +kecepatan+ "\n" +warna);
      
       System.out.println("bremmBremm..\n");
}
        void matikan (){
       System.out.println(merek+ "\n" +kecepatan+ "\n" +warna);
      
       System.out.println("ngikkkk...\n");
}
}

public class Tugas1 {

    public static void main(String[] args) {
       //instansiasi object
       //object mobil1,2,3
       
   
       Mobil mobil1 = new Mobil();
       mobil1.merek = "AVANZA";
       mobil1.kecepatan = 1500;
       mobil1.warna = "Hijau";
       
       
       //opsi object ke2
       Mobil mobil2 = new Mobil();
       mobil2.merek = "Alphard";
       mobil2.kecepatan =2500;
       mobil2.warna = "Hitam";
       
       
       //opsi object ke3 
       Mobil mobil3 = new Mobil();
       mobil3.merek = "AGYA";
       mobil3.kecepatan = 1000;
       mobil3.warna = "Putih";
       
        System.out.println("======");
        System.out.println("Nama : Muhammad Rizky Abdillah");
        System.out.println("Kelas : TI.20.A2");       
        System.out.println("Mapel : OOP JAVA\n");
                
                
       System.out.println("Mobil yang sedang di nyalakan");
       mobil1.nyalakan();
       mobil3.nyalakan();
       
       System.out.println("Mobil yang sedang di matikan");
       mobil2.matikan();
        }
}
