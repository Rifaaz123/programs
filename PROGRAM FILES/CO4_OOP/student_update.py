class Student:
    def __init__(self,name,rollno,marks):
        self.name=name
        self.rollno=rollno
        self.marks=marks

    def display(self):
        print(self.name, self.rollno, self.marks)

    def update_marks(self,new_marks):
        self.marks=new_marks
