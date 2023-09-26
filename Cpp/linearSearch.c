#include<stdio.h>

int search(int a[],int n,int i)
{
 for(int j=0;j<n;j++)
 {
  if(a[j]==i)
    return j;
 }
 return -1;
}

void main()
{
 int a[50],n,m,index;
 printf("Enter size of array:");
 scanf("%d",&n);
 
 for(int i=0;i<n;i++)
 {
   printf("Enter array element at %d : ",i);
   scanf("%d",&a[i]);
 }

   printf("\n Array elements:");
 for(int i=0;i<n;i++)
 {
   printf("%d,",a[i]);
 }
 printf("\n \n Element to search: ");
 scanf("%d",&m);
 index=search(a,n,m);
 if(index!=-1)
  printf("\n Element %d found at  index: %d,  position:%d \n",m,index,index+1);
 else
  printf("\n !!! Element not Found !!! \n");
}

