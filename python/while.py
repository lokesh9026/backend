a=1
while a<6:
    print(a)
    a+=1

i=1
while i<10:
    print(i)
    if i==8:
        break
    i+=1

i=0
while i<6:
    i+=1
    if i==3:
        continue
    print(i)

i=1
while i<6:
    print(i)
    i+=1
else:
    print("i is no longer less then 6")