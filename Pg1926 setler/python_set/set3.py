
liste = [2,4,1,6,4,0,0]
print(liste)
print("0 lar başa taşındı..")
for x in range(len(liste)):
    if liste[x] == 0: 
        if liste[x] == 0:
            liste.pop(x)
            liste.insert(0,0)
    x=x-1
print(liste)

