A-  As tags latesd e alpine.

B-  As tags representam condições que o container
    tem, como versão tando do container como da 
    distro usada.

C-  Bem executei com nginx:alpine.

D-  Com nenhuma tag o doker irá procurar a versão
    mais recente "latest", e informado a tag 
    "apline", por exemplo, ele ira rodar o nginx
    em uma distro apline, que é bem mais leve que
    a "latest".

Texto:
    nem sempre será bom utilizar a latest pois seu
    projeto pode funcionar bem em uma versão, mas
    assim que a imagem for atualizada ela quebre
    totalmente, sendo assim melhor sempre expecicar
    a versão para isso não ocorrer. 