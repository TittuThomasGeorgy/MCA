dict={ 'name': '', 'Age': '', 'gender': '', 'place': ''}

dict['name']=input("Enter Name:")
dict['Age']=input("Enter Age:")
dict['gender']=input("Enter Gender:")
dict['place']=input("Enter Place:")

print("Ascending:")
print('sorted by key:',sorted(dict.items()))
print('sorted by value:',sorted(dict.items(), key=lambda item: item[1]))
print("Descenting:")
print('sorted by key:',sorted(dict.items(),reverse=True))
print('sorted by value:',sorted(dict.items(), key=lambda item: item[1],reverse=True))
