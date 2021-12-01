sal=int(input("enter your salary"))
taxapy=0
if sal<=10000:
    taxpay=0

elif sal<=20000:
    x=sal-10000
    taxpay=x*10/100

else:
    taxpay=0

    taxpay=10000*10/100

    taxpay+=(sal-20000)*20/100

print("final tax on salary ", taxpay)


   
   