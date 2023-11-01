#include <stdio.h>
#include <stdlib.h>

struct Node{
 int data;
 struct Node *rt,*lt;
};

struct Node *insert(struct Node *node)
{
      int x;
  printf("\n Enter new node element :");
  scanf("%d", &x);
  struct Node *new_child= (struct Node *) malloc(sizeof(struct Node));
   struct Node *tmp;
  new_child->rt=NULL;
  new_child->lt=NULL;
  new_child->data=x;
  tmp=node;
  while(tmp->rt!=NULL && tmp->lt!=NULL)
  {
    if(new_child->data > tmp->data)
     tmp=tmp->rt;
    else if(new_child->data < tmp->data)
     tmp=tmp->lt;
    else
     printf("duplicate value");
  }
  tmp=new_child;
  return tmp;
}

void inorder(struct Node *node)
{
  if(node!=NULL){
    inorder(node->lt);
    printf("%d ",node->data);
    inorder(node->rt);

  }
}

void main()
{
  int ch;
  struct Node *root= NULL;
  while (1)
  {
    printf("\n\n 1.Insert \n 2.Display \n 3.Exit \nEnter your Choice:");
    scanf("%d", &ch);
    switch (ch)
    {
    case 1:
    {
      root=insert(root);
      break;
    }
    case 2:
    {
      inorder(root);
      break;
    }
    case 3:
    {
      exit(0);
      break;
    }
    default:
      printf("!!! Invalid Choice !!!");
    }
  }
}
