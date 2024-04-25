<?php
class Employee:
def __init__(self, name, salary):
    self.name = name
    self.__salary = salary

def get_salary(self):
    return self.__salary

def set_salary(self, new_salary):
    if new_salary > 0:
        self.__salary = new_salary
    else:
        print("Gaji harus lebih besar dari 0")

# Membuat objek karyawan
emp1 = Employee("John Doe", 5000)

# Mengakses gaji karyawan (menggunakan metode get_salary)
print(emp1.get_salary())  # Output: 5000

# Mengubah gaji karyawan (menggunakan metode set_salary)
emp1.set_salary(6000)
print(emp1.get_salary())  # Output: 6000

# Contoh jika mencoba mengubah gaji menjadi nilai negatif
emp1.set_salary(-100)  # Output: Gaji harus lebih besar dari 0
print(emp1.get_salary())  # Output: 6000 (nilai gaji tidak berubah karena input tidak valid)
