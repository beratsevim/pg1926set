def kontrol(str):
  count = 0
  for ch in str:
    if ch == "@":
      if uzunluk <= 3:
        count = count + 1
    
    
    
  if count == 1:
    return True
  else:
    return False

for a in range(3):
    if a==0:
        mailAdresi = "Gaziuniversitesi@gazi.edu.tr"
        uzunluk = 3
    elif a==1:
        mailAdresi = "Gaziuniversitesi.gazi.edu.tr"
        uzunluk = 2
    elif a==2:
        mailAdresi = "Gaziuniversitesi.gazi.edu"
        uzunluk = 3
    if(kontrol(mailAdresi)==True):
        print(uzunluk)
        print("\n"+mailAdresi+"\n")
        print('Mail adresiniz doğrudur.\n')
    else:
        print(uzunluk)
        print("\n"+mailAdresi+"\n")
        print('Mail adresiniz yanlıştır.\n')
 