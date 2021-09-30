class Node
    attr_accessor :next
    attr_reader :data
    def initialize data
        @data = data
        @next = nil
    end
end

class LinkedList
    attr_accessor :head
    def initialize
        @head = nil
    end
    def add data
        temp = @head
        @head = Node.new(data)
        @head.next = temp
    end
    def printList
        temp = @head
        while temp
            puts temp.data
            temp = temp.next
        end
    end
    def count 
        temp = @head
        c = 0
        while temp
            c+=1
            temp = temp.next
        end
        return c
    end
    def addAtEnd data
        node = @head
        #if we use node instead of node.next we will get null instead of last node
        while node.next != nil 
            node = node.next
        end
        node.next = Node.new(data)
    end
end

list = LinkedList.new
list.add(1)
list.add(2)
list.add(3)


list.addAtEnd 4
list.addAtEnd 5
list.addAtEnd 6


list.printList

puts "List have #{list.count} elements"

