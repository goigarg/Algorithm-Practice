class Node:
    def __init__(self, data):
        self.data = data
        self.next = None


class LinkedList:
    def __init__(self):
        self.head = None

    def add(self, data):
        if self.head is None:
            self.head = Node(data)
        else:
            temp = self.head
            self.head = Node(data)
            self.head.next = temp

    def reverse(self, temp):
        if temp is None:
            return
        self.reverse(temp.next)
        print(temp.data)


llist = LinkedList()

for i in range(0, 5):
    llist.add(i)

llist.reverse(llist.head)
