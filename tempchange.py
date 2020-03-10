# You will see EOF error in this program.. it will work perfectly on laptop or computer..
print (" 1: Celsius To Fahrenheit and Kelvin")
print (" 2: Fahrenheit To Celsius and Kelvin")
print (" 3: Kelvin To Celsius and Fahrenheit")
def option():
    op = int(input(" Enter Option : "))
    if op == 1:
         cfk()
    elif op == 2:
        fck()
    elif op == 3:
        kcf()
    else :
        print (" Invalid Input... ")
        option()
    
def cfk():
    c = float(input(" Enter Celsius (Degree) : "))
    f = ((9 * c) / 5) + 32
    k = c + 273
    print (" Temperature : ",c," Degree Celsius & ",f," Degree Fahrenheit & ",k," Kelvin")

def fck():
    f = float(input(" Enter Ferenheit (Degree) : "))
    c = (5 * (f - 32)) / 9
    k = c +273
    print (" Temperature : ",c," Degree Celsius & ",f," Degree Fahrenheit & ",k," Kelvin")
def kcf():
    k = float(input(" Enter Kelvin : "))
    c = k + 273
    f = ((9 * c) / 5) + 32
    print (" Temperature : ",c," Degree Celsius & ",f," Degree Fahrenheit & ",k," Kelvin")
option()