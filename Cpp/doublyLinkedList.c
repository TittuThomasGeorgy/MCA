#include <stdio.h>
#include <stdlib.h>

struct Node
{
    int data;
    struct Node *nxt, *prev;
};

struct Node *head = NULL;
int n = 0;

void display()
{
    if (head == NULL)
    {
        printf("Empty list");
        return;
    }
    printf("\n\n  Head: %d No of ele: %d ", head, n);
    printf("\n List elements:\n");
    struct Node *tmp = head;
    printf("\n Forward");
    while (tmp->nxt != NULL)
    {
        printf("<-> %d ", tmp->data);
        tmp = tmp->nxt;
    }
    printf("<-> %d ", tmp->data);
    printf("\n Back");
    while (tmp != NULL)
    {
        printf("<-> %d  ", tmp->data);
        tmp = tmp->prev;
    }
    // tmp = tmp->prev;
    // printf("<-> %d ", tmp->data);
}

void insertAtBeg()
{
    int x;
    printf("\n Enter element to insert:");
    scanf("%d", &x);
    struct Node *new_node = (struct Node *)malloc(sizeof(struct Node));
    new_node->data = x;
    if (head == NULL)
    {
        new_node->nxt = NULL;
        new_node->prev = NULL;
    }
    else
    {
        new_node->nxt = head;
        (new_node->nxt)->prev = new_node;
    }
    new_node->prev = NULL;
    head = new_node;
    n++;
    printf("\n Element inserted at Begining");
}

void insertAtEnd()
{
    int x;
    printf("\n Enter element to insert:");
    scanf("%d", &x);
    struct Node *new_node = (struct Node *)malloc(sizeof(struct Node));
    new_node->data = x;
    new_node->nxt = NULL;
    struct Node *tmp = head;
    while (tmp->nxt != NULL)
        tmp = tmp->nxt;
    new_node->prev = tmp;
    tmp->nxt = new_node;
    n++;
    printf("\n Element inserted at End");
}
void insertAtPos()
{
    int x, pos, count = 0;
    printf("\n Enter position to insert:");
    scanf("%d", &pos);
    if (pos == 0)
    {
        insertAtBeg();
        return;
    }
    else if (pos == n)
    {
        insertAtEnd();
        return;
    }
    else if (pos > n)
    {
        printf("Invalid Position");
        return;
    }
    else
    {
        printf("\n Enter element to insert:");
        scanf("%d", &x);
        struct Node *new_node = (struct Node *)malloc(sizeof(struct Node));
        new_node->data = x;
        new_node->nxt = NULL;
        new_node->prev = NULL;

        struct Node *tmp = head;
        while (count < pos - 1)
        {
            tmp = tmp->nxt;
            count++;
        }
        new_node->nxt = tmp->nxt;
        (tmp->nxt)->prev = new_node;
        new_node->prev = tmp;
        tmp->nxt = new_node;
        n++;
        printf("\n Element inserted at Position %d", pos);
    }
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
    if (head == NULL)
    {
        printf("\n Empty List");
        return;
    }
    tmp = head;
    if (tmp->nxt == NULL)
        head = NULL;
    else
    {
        tmp->nxt->prev = NULL;
        head = tmp->nxt;
    }
    tmp->nxt = NULL;
    n--;
    free(tmp);
    printf("\n Element deleted from Begining");
}

void deleteEnd()
{
    struct Node *tmp1 = head;
    struct Node *tmp2 = NULL;
    while (tmp1->nxt->nxt != NULL)
        tmp1 = tmp1->nxt;
    tmp2 = tmp1->nxt;
    tmp1->nxt = NULL;
    printf("\n Element Deleted at End: %d", tmp2->data);
    free(tmp2);
    n--;
}
void deletePos()
{
    int x, pos, count = 0;
    printf("\n Enter position to delete:");
    scanf("%d", &pos);
    if (pos == 0)
    {
        deleteBeg();
        return;
    }
    else if (pos == n)
    {
        deleteEnd();
        return;
    }
    else if (pos > n)
    {
        printf("Invalid Position");
        return;
    }
    else
    {
        struct Node *tmp = head;
        while (count < pos - 1)
        {
            tmp = tmp->nxt;
            count++;
        }
        struct Node *tmp2 = NULL;
        tmp2 = tmp->nxt;
        tmp->nxt->nxt->prev = tmp2->prev;
        tmp->nxt = tmp2->nxt;
        printf("\n Element Deleted at Pos %d : %d  ", pos, tmp2->data);
        free(tmp2);
        n--;
    }
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

void peek()
{
    int x, pos, count = 0;
    printf("\n Enter position to peek:");
    scanf("%d", &pos);
    struct Node *tmp = head;
    while (count < pos - 1)
    {
        tmp = tmp->nxt;
        count++;
    }
    printf("\n Element at Pos %d : %d  ", pos, tmp->data);
}

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
            peek();
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
