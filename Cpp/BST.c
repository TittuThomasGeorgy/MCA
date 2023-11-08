#include <stdio.h>
#include <stdlib.h>

struct node{
 int data;
 struct node *rt,*lt;
};

struct node *insert(struct node *node, int x)
{
  if (node == NULL) {
        struct node* new_node = (struct node*)malloc(sizeof(struct node));
        new_node->data = x;
        new_node->lt = NULL;
        new_node->rt = NULL;
        return new_node;
    }
  
    if(x > node->data)
     node->rt=insert(node->rt,x);
    else if(x < node->data)
     node->lt=insert(node->lt,x);
    else
     printf("duplicate value");
//  if(new_child->data > tmp->data)
//      tmp->rt=new_child;
//  else if(new_child->data < tmp->data)
//      tmp->lt=new_child;
  return node;
}

void inorder(struct node *node)
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
  struct node *root= NULL;
  while (1)
  {
    printf("\n\n 1.Insert \n 2.Display \n 3.Exit \nEnter your Choice:");
    scanf("%d", &ch);
    switch (ch)
    {
    case 1:
    {
      int x;
  printf("\n Enter new node element :");
  scanf("%d", &x);
      root=insert(root,x);
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
