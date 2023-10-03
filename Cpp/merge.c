#include<stdio.h>


int a[50],n, b[50],m;

void merge()
{
 if(m+n>50)
 {
  printf("!!! Array overflow !!!");
  return;
 }
 for(int i=0;i<m;i++)
  a[n+i]=b[i];
 n=n+m;
}
void main()
{
 
 printf("\n \n  Enter size of array1: ");
 scanf("%d",&n);
 
 for(int i=0;i<n;i++)
 {
   printf("Enter array element at %d of array1: ",i);
   scanf("%d",&a[i]);
 }

   printf("\n Array elements of array1: ");
 for(int i=0;i<n;i++)
 {
   printf("%d ,",a[i]);
   
 }

 printf("\n \nEnter size of array2: ");
 scanf("%d",&m);
 
 for(int i=0;i<m;i++)
 {
   printf("Enter array element at %d of array2: ",i);
   scanf("%d",&b[i]);
 }

   printf("\nArray elements of array2: ");
 for(int i=0;i<m;i++)
 {
   printf("%d ,",b[i]);
   
 }

 merge();
 
 printf("\n\nArray elements of array1: ");
 for(int i=0;i<n;i++)
 {
   printf("%d ,",a[i]);
   
 }
 printf("\nSize of array after merge: %d\n",n);
 
}
