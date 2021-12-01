str1 = "Emma25 is Data scientist50 and AI Expert"
l=[]


str2=str1.split()
for i in str2:
    if (not(i.isalpha())):
        print(i)
