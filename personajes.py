personajes = ["Mario", "Luigi", "Peach"]
a = 0
while a < 3:
    print(personajes[a])
    if str(personajes[a]) == "Mario":
        personajes[a]="Nadine"
        print("Posición", a, " ", personajes[a])
    a = a + 1
    # nombre = str(personajes[a])
    # print(personajes[a] , " Posición: ", a)

# print(personajes)
fernando=input("ingrese un personaje nuevo")
personajes.append(fernando)  # Agregar el contenido de la variable fernando al final de la lista
print(personajes)

