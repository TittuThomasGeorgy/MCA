l1=[]
l2=[]

n=int(input('Enter size of color list1: '))
m=int(input('Enter size of color list2: '))

print('Enter elements of l1: ')
for i in range(0,n):
    l1.append(input())
print('Enter elements of l2: ')
for i in range(0,m):
    l2.append(input())

print(list(set(l1) - set(l2)))