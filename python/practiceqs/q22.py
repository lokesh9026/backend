str1 = "PyNaTive"
a=[]
b=[]
for i in str1:
    if i.islower():
        a.append(i)
    else:
        b.append(i)
l3=a+b
l4=''.join(l3)
print(l4)
