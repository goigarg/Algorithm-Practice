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

llist.add(1)
llist.add(2)
llist.add(3)

count = 0
temp = llist.head
while temp:
    count += 1
    temp = temp.next

print("Size of Linked List is " + str(count))
