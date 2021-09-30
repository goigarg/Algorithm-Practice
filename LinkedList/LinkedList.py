class Node:
    def __init__(self, data):
        self.data = data
        self.next = None


class LinkedList:
    def __init__(self):
        self.head = None

    def printList(self):
        temp = self.head
        while(temp):
            print(temp.data)
            temp = temp.next

    def add(self, data):
        temp = self.head
        self.head = Node(data)
        self.head.next = temp


llist = LinkedList()
llist.head = Node(1)

second = Node(2)


llist.head.next = second
second.next = None

llist.add(3)
llist.add(4)
llist.add(5)
llist.printList()
