class Stack:
    def __init__(self, limit):
        self.arr = []
        self.limit = limit

    def add(self, data):
        if len(self.arr) < self.limit:
            self.arr.append(data)
        else:
            print("Stack Overflow")

    def remove(self):
        if len(self.arr) > 0:
            return self.arr.pop()
        else:
            return "Stack Underflow"


stack = Stack(10)

for i in range(0, 2):
    stack.add(i)


print(stack.remove())

print(stack.remove())


print(stack.remove())
