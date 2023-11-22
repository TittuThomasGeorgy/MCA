l1=[]
l2=[]

def longest(words):
    l2=[]
    for word in words:
        l2.append((len(word),word))
    l2.sort()
    print("Longest word:",l2[-1][1],"\n Length:",len(l2[-1][1]))
    
n=int(input('Enter size of l1: '))

print('Enter elements of l1: ')
for i in range(0,n):
    l1.append(input())
longest(l1)
