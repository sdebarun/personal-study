# it shows a class polymorphism 
# it shows inheritance polymorphism

class Vehicle : 
    def __init__(self):
        pass
    
    def move(self) : 
        print('I move only')


class Car :
    def __init__(self):
        super(Vehicle)

    def move(self) :
        print('It runs ')

class Boat :
    def __init__(self):
        pass        
    
    def move(self) : 
        print("It sails")

class Plane : 
    def __init__(self):
        pass

    def move(self) :
        print("It Flies")


# instances and polymorphism

bmw = Car()
Yacht = Boat()
airbus = Plane()
bike = Vehicle()
for vehicle in [bike, bmw, Yacht, airbus] : 
    vehicle.move() # we can call the same named method for different object as it exists in each object but performing different operations