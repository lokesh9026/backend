list1 = [10, 20, 30, 40]
list2 = [100, 200, 300, 400]
list4=[]
list3=list2[::-1]
print(list3)

for i in range(len(list1)):
    for j in range(len(list3)):
        list4.append(list1[i],list3[j])
print(list4)