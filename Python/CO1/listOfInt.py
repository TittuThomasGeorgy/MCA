l1=[]
l2=[]

n=int(input('Enter size of l1: '))
m=int(input('Enter size of l2: '))

print('Enter elements of l1: ')
for i in range(0,n):
    l1.append(int(input()))
    
print('Enter elements of l2: ')
for i in range(0,m):
    l2.append(int(input()))

if(len(l1)==len(l2)):
    print("Two lists are same length.")
else:
    print("Two lists are dif length.")

if(sum(l1)==sum(l2)):
    print("Two lists have same Sum.")
else:
    print("Two lists have dif Sum.")

if(any(item in l1 for item in l2)):
    print("Two lists have common elements.")
else:
    print("Two lists not have common elements.")