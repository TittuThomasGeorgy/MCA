#include<stdio.h>
#include<stdlib.h>

int top=-1;
int isEmpty()
{
 if(top==-1)
 {
  printf("\n !!! Stack is Empty !!! \n");
  return 1;
 }
 return 0; 
}

void push(int a[])
{
 int x;
 printf("\n Enter element to push:");
 scanf("%d",&x);
 ++top;
 a[top]=x;
 printf("\n Element pushed: %d, top: %d  ",a[top],top);
}

void pop(int a[])
{
 if(isEmpty()) return;
 printf("\n Element poped:%d",a[top]);
 --top;
}

void peek(int a[])
{
 if(isEmpty()) return;
 int x;
 printf("\n Enter position to Peek:");
 scanf("%d",&x);
 if(x>top || x<0)
  printf("\n !!! INVALID POSITION !!!\n");
 else
  printf("\n Element at %d : %d",x,a[x]);
}

void display(int a[])
{
 printf("\n\n Top:%d",top);
 printf("\n Stack elements:\n");
 for(int i=top;i>=0;i--)
 {
   printf("%d \n",a[i]);
 }
}

void main()
{
 int a[10],ch;
 while(1){
  printf("\n\n 1.Push \n 2.Pop \n 3.Peek \n 4.Display \n 5.Exit \nEnter your Choice:");
  scanf("%d",&ch);
  switch(ch)
  {
    case 1:{ push(a);break;}
    case 2:{ pop(a);break;}
    case 3:{ peek(a);break;}
    case 4:{ display(a);break;}
    case 5:{ exit(0);break;}
    default: printf("!!! Invalid Choice !!!");
  }
 } 
 getch();
}
