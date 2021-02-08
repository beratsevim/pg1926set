liste = [0,1,2,3,4,5,6,7,8,9]
for i in liste:
    if(liste[i] % 2 == 1):
        a=liste[i]
        for j in liste:
            if(liste[j] % 2 == 1):
                if(liste[j] > liste[i]):
                    a = liste[j]
                    
                    
print([a])