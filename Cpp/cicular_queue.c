#include <stdio.h>
#include <stdlib.h>

int front = -1, rear = -1, max;

int isEmpty()
{
  if (front == -1)
  {
    printf("\n !!! Queue is Empty !!! \n");
    return 1;
  }
  return 0;
}

int isFull()
{
  if ((rear + 1) % max == front)
  {
    printf("\n !!! Queue is full !!! \n");
    return 1;
  }
  return 0;
}

void enqueue(int a[])
{
  if (isFull())
    return;
  int x;
  printf("\n Enter element to push:");
  scanf("%d", &x);  
  if (front == -1)
    ++front;
  rear = (rear + 1) % max;
  a[rear] = x;
  printf("\n Element pushed: %d, front: %d, rear: %d  ", a[rear], front, rear);
}

void dequeue(int a[])
{
  if (isEmpty())
    return;
  if (front == rear)
  {
    front = -1;
    rear = -1;
  }
  else
    front = (front + 1) % max;
  printf("\n Element poped:%d,  front: %d, rear: %d  ", a[front], front, rear);
}

void peek(int a[])
{
  if (isEmpty())
    return;
  int x;
  printf("\n Enter position to Peek:");
  scanf("%d", &x);
  if (x < 0 || x > max)
    printf("\n !!! INVALID POSITION !!!\n front: %d, rear: %d  ", front, rear);
  else
    printf("\n Element at %d : %d", x, a[x]);
}

void display(int a[])
{
  int i =0;
  if (isEmpty())
    return;
  printf("\n\n  front: %d, rear: %d  ", front, rear);
  printf("\n Queue elements:\n");
  for ( i = front; i !=rear; i=(i+1)%max)
  {
    printf("%d ", a[i]);
  }
   printf("%d ", a[i]);
}

void main()
{
  int a[10], ch;
  printf("\n Enter MAX size of queue:");
  scanf("%d", &max);
  while (1)
  {
    printf("\n\n 1.Enqueue \n 2.Dequeue \n 3.Peek \n 4.Display \n 5.Exit \nEnter your Choice:");
    scanf("%d", &ch);
    switch (ch)
    {
    case 1:
    {
      enqueue(a);
      break;
    }
    case 2:
    {
      dequeue(a);
      break;
    }
    case 3:
    {
      peek(a);
      break;
    }
    case 4:
    {
      display(a);
      break;
    }
    case 5:
    {
      exit(0);
      break;
    }
    default:
      printf("!!! Invalid Choice !!!");
    }
  }
}
