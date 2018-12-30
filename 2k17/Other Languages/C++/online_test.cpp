#include<iostream>
using namespace std;

int func(int num)
{
int count = 0;
while (num)
{
count++;
num >>= 1;
cout << num << endl;
}
return (count);
}

int main()
{
 cout << func(435);
return 0;
}
