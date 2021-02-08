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
print("Uzantı uzunluğu giriniz.")
print("Maksimum 3 olmalıdır")
uzunluk = int(input())
print("kullanıcıAdı@websiteSağlayıcı.siteUzantısı.ülkekodu")
print("Formatında mail adresini giriniz.")
mailAdresi = input()
print("\n \n")
if(kontrol(mailAdresi)==True):
    print(uzunluk)
    print("\n")
    print(mailAdresi+"\n")
    print('Mail adresiniz doğrudur.')
else:
    print(uzunluk)
    print("\n")
    print(mailAdresi+"\n")
    print('Mail adresiniz yanlıştır')
 