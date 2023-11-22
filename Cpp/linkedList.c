#include <stdio.h>
#include <stdlib.h>

struct Node
{
    int data;
    struct Node *ptr;
};

struct Node *head = NULL;

void insertAtBeg()
{
    int x;
    printf("\n Enter element to insert:");
    scanf("%d", &x);
    struct Node *new_node = (struct Node *)malloc(sizeof(struct Node));
    new_node->data = x;
    new_node->ptr = head;
    head = new_node;
    printf("\n Element inserted at Begining");
}

void insertAtEnd()
{
    int x;
    printf("\n Enter element to insert:");
    scanf("%d", &x);
    struct Node *new_node = (struct Node *)malloc(sizeof(struct Node));
    new_node->data = x;
    new_node->ptr = NULL;
    struct Node *tmp = head;
    while (tmp->ptr != NULL)
        tmp = tmp->ptr;
    printf("\n Element inserted at End");
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
        ++front;
    printf("\n Element poped:%d,  front: %d, rear: %d  ", a[front], front, rear);
}

void peek(int a[])
{
    if (isEmpty())
        return;
    int x;
    printf("\n Enter position to Peek:");
    scanf("%d", &x);
    if (x < front || x > rear)
        printf("\n !!! INVALID POSITION !!!\n");
    else
        printf("\n Element at %d : %d", x, a[x]);
}

void display(int a[])
{
    if (isEmpty())
        return;
    printf("\n\n  front: %d, rear: %d  ", front, rear);
    printf("\n Queue elements:\n");
    for (int i = front; i <= rear; i++)
    {
        printf(" %d ", a[i]);
    }
}

void main()
{
    int a[10], ch;
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
