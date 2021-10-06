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

    def printList(self):
        if self.head is None:
            print("LinkedList is empty")
        else:
            temp = self.head
            while(temp):
                print(temp.data)
                temp = temp.next

    def reverse(self):
        if self.head is None:
            return -1
        temp = self.head
        prev = None
        while(temp is not None):
            next = temp.next
            temp.next = prev
            prev = temp
            temp = next
        self.head = prev  # cause head is still on starting node we want to set it on last node


llist = LinkedList()

for i in range(0, 5):
    llist.add(i)

llist.reverse()
llist.printList()
