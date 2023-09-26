#include<stdio.h>

void main()
{
 int a[50],n;
 printf("Enter size of array:");
 scanf("%d",&n);
 
 for(int i=0;i<n;i++)
 {
   printf("Enter array element at %d:",i);
   scanf("%d",&a[i]);
 }

   printf("Array elements:");
 for(int i=0;i<n;i++)
 {
   printf("%d ,",a[i]);
   
 }
}
