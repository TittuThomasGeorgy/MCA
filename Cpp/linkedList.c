#include <stdio.h>
#include <stdlib.h>

struct Node
{
    int data;
    struct Node *ptr;
};

struct Node *head = NULL;

void display()
{
    if (head == NULL)
    {
        printf("Empty list");
        return;
    }
    printf("\n\n  Head: %d ", head);
    printf("\n List elements:\n");
    struct Node *tmp = head;
    while (tmp != NULL)
    {
        printf("%d -> ", tmp->data);
        tmp = tmp->ptr;
    }
}

void insertAtBeg()
{
    int x;
    printf("\n Enter element to insert:");
    scanf("%d", &x);
    struct Node *new_node = (struct Node *)malloc(sizeof(struct Node));
    new_node->data = x;
    if (head == NULL)
        new_node->ptr = NULL;
    else
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
    tmp->ptr = new_node;
    printf("\n Element inserted at End");
}
void insertAtPos()
{
    int x, pos, count = 0;
    printf("\n Enter element to insert:");
    scanf("%d", &x);
    printf("\n Enter position to insert:");
    scanf("%d", &pos);
    struct Node *new_node = (struct Node *)malloc(sizeof(struct Node));
    new_node->data = x;
    new_node->ptr = NULL;
    struct Node *tmp = head;
    while (count != pos)
    {
        tmp = tmp->ptr;
        count++;
    }
    new_node->ptr = tmp->ptr;
    tmp->ptr = new_node;
    printf("\n Element inserted at Position %d", &pos);
}

void insertion()
{
    int ch;
    printf("\n\n 1.Beginning \n 2.End \n 3.Position \n 4.Display \n 5.Return \nEnter your Choice:");
    scanf("%d", &ch);
    switch (ch)
    {
    case 1:
    {
        insertAtBeg();
        display();
        break;
    }
    case 2:
    {
        insertAtEnd();
        display();
        break;
    }
    case 3:
    {
        insertAtPos();
        display();
        break;
    }
    case 4:
    {
        display();
        break;
    }
    case 5:
    {
        break;
    }
    default:
        printf("!!! Invalid Choice !!!");
    }
}
void deleteBeg()
{
    struct Node *tmp;
    tmp = head;
    head = tmp->ptr;
    free(tmp);
    printf("\n Element deleted from Begining");
}

void deleteEnd()
{
    struct Node *tmp1 = head;
    struct Node *tmp2 = NULL;
    while (tmp1->ptr->ptr != NULL)
        tmp1 = tmp1->ptr;
    tmp2 = tmp1->ptr;
    tmp1->ptr = NULL;
    printf("\n Element Deleted at End: %d", tmp2->data);
    free(tmp2);
}
void deletePos()
{
    int pos, count = 0;
    printf("\n Enter position to insert:");
    scanf("%d", &pos);
    struct Node *tmp = head;
    while (count < pos)
    {
        tmp = tmp->ptr;
        count++;
    }
    struct Node *tmp2 = NULL;
    tmp2 = tmp->ptr;
    tmp->ptr = tmp2->ptr;
    printf("\n Element Deleted at Pos %d : %d  ", pos, tmp2->data);
    free(tmp2);
}

void deleteList()
{
    int ch;
    printf("\n\n 1.Beginning \n 2.End \n 3.Position \n 4.Display \n 5.Return \nEnter your Choice:");
    scanf("%d", &ch);
    switch (ch)
    {
    case 1:
    {
        deleteBeg();
        display();
        break;
    }
    case 2:
    {
        deleteEnd();
        display();
        break;
    }
    case 3:
    {
        deletePos();
        display();
        break;
    }
    case 4:
    {
        display();
        break;
    }
    case 5:
    {
        break;
    }
    default:
        printf("!!! Invalid Choice !!!");
    }
}

// void peek(int a[])
// {
//     if (isEmpty())
//         return;
//     int x;
//     printf("\n Enter position to Peek:");
//     scanf("%d", &x);
//     if (x < front || x > rear)
//         printf("\n !!! INVALID POSITION !!!\n");
//     else
//         printf("\n Element at %d : %d", x, a[x]);
// }

int main()
{
    int a[10], ch;
    while (1)
    {
        printf("\n\n 1.Push \n 2.Pop \n 3.Peek \n 4.Display \n 5.Exit \nEnter your Choice:");
        scanf("%d", &ch);
        switch (ch)
        {
        case 1:
        {
            insertion();
            break;
        }
        case 2:
        {
            deleteList();
            break;
        }
        case 3:
        {
            // peek(a);
            break;
        }
        case 4:
        {
            display();
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
    return 0;
}
