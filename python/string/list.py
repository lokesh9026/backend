# a=["acb","hello",123]
# print(a[0:2])


# my_list = ['i','k','l','u','jklj']
# print(my_list[0]) # Output: p
# print(my_list[2]) # Output: o
# print(my_list[4]) # Output: e



Llist = ["Happy", [2,0,1,5]]
print(Llist[0][2]) 
print(Llist[1][3]) # Output: 5


# list1 = ['physics', 'chemistry', 1997, 2000]
# print (list1)
# del list1[2]
# print(list1)

list1, list2 = [123, 'xyz'], [456, 'abc']
print (list1, list2)
print (len(list1))
# print ("Max value element : ", max(list1))
# print ("Max value element : ", min(list1))
# list1.append('C#')
# print ("Count for 123 : ", list1.count(123))


list1.extend(list2)
print(list1)
# print ('Extended List :', list1)
# print ('Index of C#', list1.index('C#'))
list1.insert(1, 'efg')
print(list1)


list1.pop(1)
print ("list now : ", list1)
list1.remove('xyz')
print ("list now : ", list1)
list1.reverse()
print ("list now : ", list1)

list2=[88,99,22,33,11]
list2.sort()
print ("list now : ", list2)

