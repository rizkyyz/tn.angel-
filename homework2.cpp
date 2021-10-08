/*
Perkalian statis
Dengan Bahasa C++
*/

#include<iostream>
#include<iomanip>

using namespace std;

main()
{
    int x[6] = {0, 1, 2, 3, 4, 5};
    int y[6] = {0, 1, 2, 3, 4, 5};
    int da = 0, DA =1;
    char ascii;

    endl(cout);
    cout<<"       ";
    for(int X=0; X<6; ++X)
    {
        cout<<"   "<<X<<"  ";
    }

    endl(cout);
    endl(cout);
    //Tampil garis di mulai disini
    while(da<65)
    {
        cout<<(char)196;
        da++;
    }
    //Garis berakhir disini
    endl(cout);

    for(int a=0; a<6; a++)
    {endl(cout);
     cout<<x[a]<<setw(sizeof(x[a]))<<(char)179;
     for(int b=0; b<6; b++)
     {
            cout<<setw(6)<<x[a]*y[b];
        }
        endl(cout);
    }

    endl (cout);

    system("pause");
}
